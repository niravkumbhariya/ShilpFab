<div class="form-section">
    <form id="contact-form" action="{{ route('store.contact') }}" method="POST">
        @csrf
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="First Name">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Last Name">
        </div>
        <div class="input-group">
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Subject">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="input-group textarea">
            <label>Message</label>
            <textarea name="message" rows="10" placeholder="Message"></textarea>
        </div>

        <button type="submit" class="btn-primary">Send</button>
    </form>
</div>
