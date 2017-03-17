$(document).ready(function () {
  $(".grid-item > a").on('click', function (e) {
    e.preventDefault();
    var taskId = e.currentTarget.dataset.taskId
    $.ajax({
      url: '/admin/task-api/get-task?id=' + taskId,
      method: 'GET',
      success: function (response) {
        console.log(response);
        /*var taskModal = new Stan.Modal({
          id: 'taskModal',
          confirmHandler: function () {
            this.hide();
          },
          html: '',
        }).show();*/

      }

    });

    console.log(taskId);
  });
});
Dropzone.options.attachment = {
  init: function() {
    this.on("success", function(file) {
      var resp = JSON.parse(file.xhr.response);
      var fileId = resp.id;
      $("#task-attachment").val(fileId);


    });
  }
};