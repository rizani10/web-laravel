<div class="container">

    <div class="section-title">
    <h2>Contact</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row contact-info">

    <div class="col-md-4">
        <div class="contact-address">
        <i class="bi bi-geo-alt"></i>
        <h3>Address</h3>
        <address>A108 Adam Street, NY 535022, USA</address>
        </div>
    </div>

    <div class="col-md-4">
        <div class="contact-phone">
        <i class="bi bi-phone"></i>
        <h3>Phone Number</h3>
        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="contact-email">
        <i class="bi bi-envelope"></i>
        <h3>Email</h3>
        <p><a href="mailto:info@example.com">info@example.com</a></p>
        </div>
    </div>

    </div>

    <div class="form">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
        <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
        </div>
        </div>
        <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
    </div>

</div>