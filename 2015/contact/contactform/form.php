<div class="ioncontactform">
  <form class="form-horizontal" role="form" method="post" action="contact.php">
      <div class="form-group hideme da" data-sr="wait 0.4s">
          <label for="name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
          </div>
      </div>
      <div class="form-group hideme da" data-sr="wait 0.6s">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
          </div>
      </div>
      <div class="form-group hideme da" data-sr="wait 0.8s">
          <label for="message" class="col-sm-2 control-label">Message</label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="4" name="message" placeholder="Your message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
          </div>
      </div>
      <div class="form-group hideme da" data-sr="wait 1s">
          <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
              <?php echo "<p class='text-danger'>$errHuman</p>";?>
          </div>
          <div class="col-sm-2">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-info" style="width: 100%;">
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
              <?php echo $result; ?>    
          </div>
      </div>
  </form>
</div>