<div class="form-section" data-aos="fade-left" data-aos-duration="2000">
    <form id="contact-form" action="{{ route('store.contact') }}" method="POST">
        @csrf
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="First Name">
            <span class="text-danger error" id="firstname-error"></span>
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Last Name">
            <span class="text-danger error" id="lastname-error"></span>
        </div>
        <div class="input-group">
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Subject">
            <span class="text-danger error" id="subject-error"></span>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email">
            <span class="text-danger error" id="email-error"></span>
        </div>
        <div class="input-group textarea">
            <label>Message</label>
            <textarea name="message" rows="10" placeholder="Message"></textarea>
            <span class="text-danger error" id="message-error"></span>
        </div>

        <button type="submit" class="btn-primary">Send</button>
    </form>
</div>
