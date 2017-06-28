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
  // Фильтры по назначению и статусов тасков
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

  fadeOutAlert();

  $('.delete-file').on('click', function (e) {
      var taskId = $("#task-form").attr('data-task-id');
      console.log(taskId);
      deleteAttachment(taskId);

  });

});

function fadeOutAlert(){

  if($('#task-alert').length !==0){
    setTimeout(function () {
      $('#task-alert').fadeOut(3000);
    }, 2000);

  }
}


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

function deleteAttachment(taskId) {
  $.ajax({
    url:'/admin/task-api/delete-attachment',
    data: {'taskId': taskId},
    type: 'PATCH',
    contentType : 'application/json',
    xhr: function() {
      return window.XMLHttpRequest == null || new window.XMLHttpRequest().addEventListener == null
        ? new window.ActiveXObject("Microsoft.XMLHTTP")
        : $.ajaxSettings.xhr();
    },
    success: function (response) {
      console.log(response);
      if(response.status == 'success') {

        var accessToken = $('#access-token').val();
        var fileUploadForm = "<form action='/files/file/push?&access-token=" + accessToken + "' id='attachment' class='dropzone'>" +
          "<input type='hidden' name='attachment'>" +
          "<input type='hidden' name='user_id' value=" + response.userId + ">" +
          "</form>";


        $('.uploaded-file').remove();
        $('#task-form .x_content').append(fileUploadForm);
        $("#attachment").dropzone();

        return ['success'];

      } else {

        $('#task-form .x_content').append("<div class='fail-edit'>File removing failed</div>");
        return ['fail'];

      }
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
Dropzone.options.myDropzone = {
  init: function() {
    this.on("success", function(file) {
      var resp = JSON.parse(file.xhr.response);
      var fileId = resp.id;
      console.log(fileId);
      $("#task-attachment").val(fileId);


    });
  },


};