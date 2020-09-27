function update() {
  $('#clock').html(moment().format('D-MM-YYYY H:mm:ss'));
}
setInterval(update, 1000);