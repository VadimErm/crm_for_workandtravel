$(document).ready(function () {
  $(".grid-item > a").on('click', function (e) {
    e.preventDefault();
    var taskId = e.currentTarget.dataset.taskId
    console.log(taskId);
  });
});
