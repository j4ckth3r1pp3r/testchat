var conn = new WebSocket(`ws://${location.hostname}:8080`);

conn.onopen = function(e) {
  $('.loading').hide();
  $('.chat').show();
};

conn.onmessage = function (e) {
  $('.chat-box-main').append(`
    <hr class="hr-clas" />
    <div class="chat-box-left">
        ${e.data}
    </div>
    <div class="chat-box-name-left">
        <img src="assets/img/user.png" alt="bootstrap Chat box user image" class="img-circle" />
        -  Another User
    </div>
    `);
}

conn.onerror = function (err) {
  $('.chat').hide();
  $('.loading').hide();
  $('.noconnection').show();
}


$('.msg').on('keyup', function() {
  let _self = this;
  $('.send.btn').prop('disabled', !$(_self).val().length);
});

$('.send.btn').click(function (e) {
  e.preventDefault();
  let msg = $('.msg').val();

  $('.msg').val('');

  conn.send(msg);

  $('.chat-box-main').append(`
    <hr class="hr-clas" />
    <div class="chat-box-right">
        ${msg}
    </div>
    <div class="chat-box-name-right">
        <img src="assets/img/user.gif" alt="bootstrap Chat box user image" class="img-circle" />
        - Me
    </div>
    `);

    $(this).prop('disabled', true);

});
