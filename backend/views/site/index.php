<div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
            <div class="count"><?= \common\helpers\UsersCountHelper::getApplicantsCount() ?></div>
            <h3>Applicants</h3>

        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="icon"><i class="fa fa-comments-o"></i></div>
            <div class="count"><?= \common\helpers\UsersCountHelper::getParticipantsCount() ?></div>
            <h3>Participants</h3>

        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
            <div class="count"><?= \common\helpers\UsersCountHelper::getUsersOnlineCount() ?></div>
            <h3>Online users</h3>

        </div>
    </div>
</div>