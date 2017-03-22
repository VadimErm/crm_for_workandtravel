$(document).ready(function () {

  /* Изменения статуса таска на прочитаный, сделанный*/
  $(".grid-item > a").on('click', function (e) {
    e.preventDefault();
    var taskId = e.currentTarget.dataset.taskId;

    console.log(taskId);

    if (!$("#taskModal-" + taskId).length) {
      $.ajax({
        url: '/admin/task-api/read-task?id=' + taskId,
        method: 'GET',
        success: function (response) {

          var taskItem = $("a[data-task-id="+taskId+"] > .task-item");

          if(taskItem.hasClass("new-task")){

            taskItem.removeClass("new-task");
            taskItem.addClass("task-default");
            countMinus('new-tasks-count');

          }

          var taskModal = new Stan.Modal({

            id: 'taskModal-' + taskId,
            confirmHandler: function () {
              setDone(taskId); //изменяем статус задания на выполнено
              this.hide();

              var item = $("a[data-task-id="+taskId+"]").parent();
              $grid.masonry('remove', item).masonry();// удаляем виджет задания и перегружаем masonry

            },
            html: response,
          }).show();

        }

      });
    } else {
      $("#taskModal-" + taskId).modal('show');
    }

  });

  $(".filter-destination").on('change', function (e) {
      var value = $(this).val();
      if (window.location.href.indexOf("done") !== -1){
        window.location.href ='/admin/task/done?destination=' + value;
      } else {
        window.location.href ='/admin/task/new?destination=' + value;
      }

  });

  $(".filter-status").on('change', function (e) {
    var value = $(this).val();

    window.location.href = '/admin/task/new?status=' + value;

  });




});

function setDone(taskId) {


    $.ajax({
      url : '/admin/task-api/done-task',
      data : {'taskId': taskId},
      type : 'PATCH',
      contentType : 'application/json',
      xhr: function() {
        return window.XMLHttpRequest == null || new window.XMLHttpRequest().addEventListener == null
          ? new window.ActiveXObject("Microsoft.XMLHTTP")
          : $.ajaxSettings.xhr();
      },
      success: function () {
        return ['success'];
      },
      error: function () {
        return ['error'];
      }
    });

}


function countMinus(id)
{
    var count = Number($("#"+ id).html());
    count--;
    if(count > 0){
      $("#"+ id).html(count);
    } else {
      $("#"+ id).remove();
    }

}
Dropzone.options.attachment = {
  init: function() {
    this.on("success", function(file) {
      var resp = JSON.parse(file.xhr.response);
      var fileId = resp.id;
      $("#task-attachment").val(fileId);


    });
  }
};