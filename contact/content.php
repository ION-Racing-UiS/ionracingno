<div class="container">
    <div class="row">
        <div class="ionform">
            <div class="col-xs-12 col-md-8">
                <?php
					$mail = isset($_GET["mail"]) ? $_GET["mail"] : "";
					if ($mail == "success") {
						echo "<div class='alert alert-success'><p style='padding: 0px;'><b>Thank you, we'll be in touch!</b></p></div>";
					} else {}
				?>
                <form name="contactform" method="post" action="http://www.domeneshop.no/cgi-bin/mailto.cgi" class="form-horizontal" accept-charset="ISO-8859-1">
                    <input type="hidden" name="_to" value="post@ionracing.no">
                    <input type="hidden" name="_from" value="feedback@ionracing.no">
                    <input type="hidden" name="_subject" value="Message from webform">
                    <input type="hidden" name="_resulturl" value="http://ionracing.no/contact/?mail=success">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label class="control-label">
                                <p>Name</p>
                            </label>
                            <input type="text" class="form-control" name="realname" placeholder="Your full name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label class="control-label">
                                <p>Email</p>
                            </label>
                            <input type="text" class="form-control" name="email" placeholder="Your email address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label class="control-label">
                                <p>Message</p>
                            </label>
                            <textarea class="form-control" rows="6" name="message" placeholder="Your message" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn email-me">Send message!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>