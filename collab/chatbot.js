document.addEventListener('DOMContentLoaded', function() {
    // Function to scroll chatbot messages to the bottom
    function scrollToBottom() {
        const chatbotMessages = document.getElementById('chatbot-messages');
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    }

    // Function to send user message
    function sendMessage() {
        const userInput = document.getElementById('user-input').value;
        if (userInput.trim() === '') return;

        // Display user's message
        const userMessageDiv = document.createElement('div');
        userMessageDiv.classList.add('user-message');
        userMessageDiv.textContent = userInput;
        document.getElementById('chatbot-messages').appendChild(userMessageDiv);

        // Clear input field
        document.getElementById('user-input').value = '';

        // Scroll to bottom
        scrollToBottom();

        // Simulate bot response
        setTimeout(() => {
            const botMessageDiv = document.createElement('div');
            botMessageDiv.classList.add('bot-message');
            botMessageDiv.textContent = getBotResponse(userInput);
            document.getElementById('chatbot-messages').appendChild(botMessageDiv);

            // Scroll to bottom
            scrollToBottom();
        }, 500);
    }

    // Function to get bot response
    function getBotResponse(input) {
        // Bot response logic
        const responses = {
            'hello': 'Hi there! How can I help you today?',
            'hi': 'Hello! How can I assist you?',
            'how are you': 'I am a bot, but I am here to help you!',
            'help': 'Sure, what do you need help with?',
            'services': 'We offer a range of services including medical support, daily living assistance, companionship, and specialized elderly care programs.',
            'contact': 'You can contact us at contact@kathmanducare.com or call us at 123-456-7890.',
            'join': 'If you are interested in joining our team, please click on the "Join Us" button on our website.',
            'register': 'To register as a carer, please go to the "Become a Carer" section and fill out the registration form with your details.',
            'care programs': 'Our care programs include in-home care, respite care, post-hospitalization care, and memory care for those with Alzheimer\'s and dementia.',
            'location': 'We are located at 123 Main Street, Kathmandu. Visit our "Contact" page for more details and directions.',
            'fees': 'Our service fees vary depending on the type of care required. Please contact us for a detailed fee structure.',
            'working hours': 'Our office is open from 9 AM to 5 PM, Monday to Friday. Care services are available 24/7.',
            'availability': 'We have trained caregivers available round the clock to provide assistance as needed.',
            'experience': 'Our caregivers have a wealth of experience in elderly care and undergo continuous training to ensure the highest level of service.',
            'emergency': 'In case of emergencies, please call 911 or visit the nearest emergency room.',
            'medication': 'Our caregivers can assist with medication reminders, but they are not authorized to administer medication. For medication administration, please consult a healthcare professional.',
            'insurance': 'We accept various insurance plans. Please contact us with your insurance details for verification.',
            'feedback': 'We value your feedback! Please email us at feedback@kathmanducare.com with your comments and suggestions.',
            'default': 'Sorry, I did not understand that. Can you please rephrase?'
        };
    
        input = input.toLowerCase();
    
        // Check if any keyword matches the user input
        for (const keyword in responses) {
            if (input.includes(keyword)) {
                return responses[keyword];
            }
        }
    
        return responses['default'];
    }

    // Event listener for sending message
    document.getElementById('send-button').addEventListener('click', sendMessage);
    document.getElementById('user-input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
});
