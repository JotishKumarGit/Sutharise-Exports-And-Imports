
<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="enquiryForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" id="message" rows="3" placeholder="Your Message" required></textarea>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-success" onclick="sendToWhatsApp()">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- enquiry  WhatsApp Script -->
<script>
    function sendToWhatsApp() {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        if (!name || !email || !phone || !subject || !message) {
            alert("Please fill in all fields.");
            return;
        }

        const whatsappNumber = "918758959542"; // Replace with your WhatsApp number (no + or spaces)
        const text = `Enquiry Details:\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject}\nMessage: ${message}`;
        const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(text)}`;

        window.open(url, "_blank");
    }
</script>

<!--  -->
<script>
    function sendToWhatsApp() {
        // Get values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        const phoneNumber = "918758959542";
        const whatsappMessage = `Hello, my name is *${name}* (%0AEmail: ${email})%0A%0A${message}`;
        const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(url, "_blank");
    }
</script>
