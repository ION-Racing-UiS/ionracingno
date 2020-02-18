<?php
require_once("nicroutil.php");


$team = readJson("team2017.json");
$members = $team->groups;

?>
<div class="membersnav">
    <div class="container">
        <p>
        <?php loop($members, function($curTeam, $i) { global $members; ?> 
            <a href="#<?php echo $curTeam->id ?>">
                <?php echo $curTeam->name ?>
            </a> <?php if ($i < sizeof($members) - 1) { echo "|"; }; ?>
        <?php }); ?>
        </p>
    </div>
</div>

<div class="container">
    <div class="members">
    <?php loop($members, function($curTeam) {?>
        <div id="<?php echo $curTeam->id ?>" class="group">
            <div class="group-line">
                <span>
                    <a class="image-link" href="#">
                        <?php echo $curTeam->name ?>
                    </a>
                </span>
            </div>
            <div class="row">
            <?php loop($curTeam->members, function($curMember) { global $team; ?>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="<?php echo $team->basePath . $curMember->image; ?>">
                        <h3><?php echo $curMember->name ?></h3>
                        <p><?php echo $curMember->role ?></p>
                    </div>
                </div>
            <?php }); ?>
            </div>
        </div>
    <?php }); ?>
    </div>
</div>