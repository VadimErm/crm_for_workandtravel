function loadNotApprovedAgreement () {

    var agreement = null;
    $.ajax({
        url: '/admin/agreement-api/get-not-approved',
        method: 'GET',
        success: function (response) {
            agreement = new Stan.Modal({
                id: 'agreementModal',
                confirmHandler: function () {
                    this.hide();
                    setApprove(response['agreement_id']);

                },
                html: response['agreement']
            }).show();
        }
    });

}

function setApprove(agreement_id) {

    $.ajax({
        url:'/admin/agreement-api/set-approve?agreement_id='+agreement_id,
        method: 'GET',
        success:function(){
            console.log('success');
        }
    });

}

$(document).ready(function() {

    setTimeout(loadNotApprovedAgreement, 1000);

});