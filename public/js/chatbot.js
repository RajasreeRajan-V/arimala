document.addEventListener("DOMContentLoaded", () => {
    const lottieButton = document.getElementById("lottieChatBtn");
    const chatBox = document.getElementById("chatBox");
    const closeChat = document.getElementById("closeChat");
    const chatMessages = document.getElementById("chatMessages");
    const sendBtn = document.getElementById("sendBtn");
    const userInput = document.getElementById("userInput");

    // Conversation state
    let conversationContext = null;

    // Predefined responses database
    const responses = {
        greetings: [
            "hi", "hello", "hey", "good morning", "good afternoon", 
            "good evening", "greetings", "hola", "namaste"
        ],
        help: [
            "help", "assist", "support", "need help", "can you help"
        ],
        services: [
            "service", "services", "what do you do", "offerings", 
            "what do you offer", "products"
        ],
        pricing: [
            "price", "cost", "pricing", "how much", "rate", 
            "charges", "fees", "payment"
        ],
        hours: [
            "hours", "timing", "when open", "schedule", "availability",
            "when are you open", "working hours"
        ],
        location: [
            "location", "address", "where", "find you", "directions"
        ],
        contact: [
            "contact", "reach", "call", "email", "phone", "whatsapp"
        ],
        about: [
            "about", "who are you", "tell me about", "company", "business"
        ],
        thanks: [
            "thank", "thanks", "appreciate", "grateful"
        ],
        bye: [
            "bye", "goodbye", "see you", "later", "exit"
        ],
        quality: [
            "quality", "good", "best", "reliable", "trust"
        ],
        delivery: [
            "delivery", "shipping", "deliver", "ship"
        ],
        refund: [
            "refund", "return", "money back", "cancel"
        ],
        appointment: [
            "appointment", "book", "schedule", "meeting", "reservation"
        ],
        complaint: [
            "complaint", "problem", "issue", "not working", "broken"
        ]
    };

    lottieButton.onclick = () => {
        chatBox.style.display = "flex";
        if (!chatMessages.innerHTML.trim()) {
            addBotMessage(`
                <strong>Hello! <i class="fa fa-hand-wave"></i></strong><br>
                How can we help you today?<br><br>
                <small>You can ask about:<br>
                • Our Services<br>
                • Pricing<br>
                • Contact Information<br>
                • Working Hours<br>
                • Location</small>
            `);
        }
    };

    closeChat.onclick = () => chatBox.style.display = "none";
    sendBtn.onclick = sendMessage;
    
    userInput.addEventListener("keypress", e => {
        if (e.key === "Enter") sendMessage();
    });

    function addUserMessage(msg) {
        chatMessages.innerHTML += `<div class="user-msg">${msg}</div>`;
    }

    function addBotMessage(msg) {
        chatMessages.innerHTML += `<div class="bot-msg">${msg}</div>`;
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function detectIntent(msg) {
        const lowerMsg = msg.toLowerCase();
        
        for (const [intent, keywords] of Object.entries(responses)) {
            if (keywords.some(keyword => lowerMsg.includes(keyword))) {
                return intent;
            }
        }
        return "unknown";
    }

    function sendMessage() {
        const msg = userInput.value.trim();
        if (!msg) return;

        addUserMessage(msg);
        userInput.value = "";

        setTimeout(() => {
            const intent = detectIntent(msg);
            handleIntent(intent, msg);
        }, 500);
    }

    function handleIntent(intent, originalMsg) {
        switch(intent) {
            case "greetings":
                addBotMessage(`
                    <strong>Hello there! <i class="fa fa-smile"></i></strong><br>
                    Welcome! How can I assist you today?<br><br>
                    Feel free to ask about our services, pricing, or contact details!
                `);
                break;

            case "help":
                addBotMessage(`
                    <strong>I'm here to help! <i class="fa fa-handshake"></i></strong><br><br>
                    I can assist you with:<br>
                    • Information about our services<br>
                    • Pricing details<br>
                    • Working hours<br>
                    • Location and directions<br>
                    • Contact information<br>
                    • Booking appointments<br><br>
                    What would you like to know?
                `);
                break;

            case "services":
                addBotMessage(`
                    <strong>Our Services <i class="fa fa-tools"></i></strong><br><br>
                    We offer a wide range of professional services tailored to your needs.<br><br>
                    For detailed information about our specific services, please contact us:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "pricing":
                addBotMessage(`
                    <strong>Pricing Information <i class="fa fa-dollar-sign"></i></strong><br><br>
                    Our pricing varies based on your specific requirements.<br><br>
                    For a customized quote, please reach out to us:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "hours":
                addBotMessage(`
                    <strong>Working Hours <i class="fa fa-clock"></i></strong><br><br>
                    Monday - Friday: 9:00 AM - 6:00 PM<br>
                    Saturday: 10:00 AM - 4:00 PM<br>
                    Sunday: Closed<br><br>
                    For urgent matters, contact us via:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "location":
                addBotMessage(`
                    <strong>Find Us <i class="fa fa-map-marker-alt"></i></strong><br><br>
                    We're located in Kanhangad, Kerala, India.<br><br>
                    For exact directions or to visit us, please contact:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "contact":
                addBotMessage(`
                    <strong>Contact Us <i class="fa fa-phone"></i></strong><br><br>
                    We'd love to hear from you!<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "about":
                addBotMessage(`
                    <strong>About Us <i class="fa fa-info-circle"></i></strong><br><br>
                    We're a dedicated team committed to providing excellent service to our customers.<br><br>
                    Want to know more? Get in touch:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "thanks":
                addBotMessage(`
                    <strong>You're welcome! <i class="fa fa-heart"></i></strong><br><br>
                    Happy to help! Is there anything else you'd like to know?
                `);
                break;

            case "bye":
                addBotMessage(`
                    <strong>Goodbye! <i class="fa fa-hand-wave"></i></strong><br><br>
                    Thank you for chatting with us. Have a great day!<br><br>
                    Feel free to return anytime you need assistance.
                `);
                break;

            case "quality":
                addBotMessage(`
                    <strong>Quality Assurance <i class="fa fa-star"></i></strong><br><br>
                    We pride ourselves on delivering top-quality service and maintaining the highest standards.<br><br>
                    Customer satisfaction is our priority!<br><br>
                    Have questions? Contact us:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "delivery":
                addBotMessage(`
                    <strong>Delivery Information <i class="fa fa-truck"></i></strong><br><br>
                    We offer various delivery options based on your location and requirements.<br><br>
                    For specific delivery details, please reach out:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "refund":
                addBotMessage(`
                    <strong>Refund Policy <i class="fa fa-credit-card"></i></strong><br><br>
                    We have a customer-friendly refund policy.<br><br>
                    For detailed information about refunds and returns, please contact us:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "appointment":
                addBotMessage(`
                    <strong>Book an Appointment <i class="fa fa-calendar-check"></i></strong><br><br>
                    We'd be happy to schedule a meeting with you!<br><br>
                    Please contact us to book your appointment:<br><br>
                    ${getContactLinks()}
                `);
                break;

            case "complaint":
                addBotMessage(`
                    <strong>We're Sorry to Hear That <i class="fa fa-frown"></i></strong><br><br>
                    Your feedback is important to us. We'd like to resolve any issues you're experiencing.<br><br>
                    Please contact us directly so we can help:<br><br>
                    ${getContactLinks()}
                `);
                break;

            default:
                addBotMessage(`
                    <strong>I'm here to help! <i class="fa fa-robot"></i></strong><br><br>
                    I didn't quite understand that, but I can help you with:<br>
                    • Services and pricing<br>
                    • Working hours<br>
                    • Location and contact info<br>
                    • Appointments<br><br>
                    Or, contact us directly:<br><br>
                    ${getContactLinks()}
                `);
        }
    }

    function getContactLinks() {
        return `
            <a href="https://wa.me/919XXXXXXXXX" target="_blank" style="color: #25D366; text-decoration: none;">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp
            </a><br>
            <a href="https://instagram.com/your_instagram" target="_blank" style="color: #E4405F; text-decoration: none;">
                <i class="fa-brands fa-instagram"></i> Instagram
            </a><br>
            <a href="mailto:youremail@gmail.com" style="color: #EA4335; text-decoration: none;">
                <i class="fa fa-envelope"></i> Email
            </a>
        `;
    }
});