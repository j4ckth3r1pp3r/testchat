<?php

namespace App\Classes\Socket;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

use App\Classes\Socket\Base\BaseSocket;

class ChatSocket extends BaseSocket
{
  protected $clients;

  public function __construct()
  {
    $this->clients = new \SplObjectStorage;
  }

  public function onOpen(ConnectionInterface $conn)
  {
    $this->clients->attach($conn);

    echo "New user ({$conn->resourceId})\n";
  }

  public function onMessage(ConnectionInterface $from, $msg)
  {
    foreach ($this->clients as $client) {
      if ($from !== $client) {
        $client->send($msg);
      }
    }
  }

  public function onClose(ConnectionInterface $conn)
  {
    $this->clients->detach($conn);

    echo "Connection {$conn->resourceId} has disconnected\n";
  }

  public function onError(ConnectionInterface $conn, \Exception $e)
  {
    echo "Error: {$e->getMessage()}\n";
    $conn->close();
  }
}
