$(document).ready(function () {
  $(".grid-item > a").on('click', function (e) {
    e.preventDefault();
    var taskId = e.currentTarget.dataset.taskId;
    console.log(taskId);
    if (!$("#taskModal-" + taskId).length) {
      $.ajax({
        url: '/admin/task-api/read-task?id=' + taskId,
        method: 'GET',
        success: function (response) {

          var taskModal = new Stan.Modal({
            id: 'taskModal-' + taskId,
            confirmHandler: function () {
              this.hide();
            },
            html: response,
          }).show();

        }


      });
    } else {
      $("#taskModal-" + taskId).modal('show');
    }


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