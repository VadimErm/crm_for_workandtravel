$(document).ready(function () {
  $(".task-item").on('click', function (e) {
    e.preventDefault();
    console.log(e.currentTarget);
  });
});
