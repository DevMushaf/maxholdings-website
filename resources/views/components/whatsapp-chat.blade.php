<div id="whatsapp-chat-widget" class="fixed bottom-6 right-6 z-50">
    <!-- Chat Box -->
    <div id="chat-box" class="hidden mb-4 w-[350px] sm:w-[380px] bg-white rounded-xl shadow-xl opacity-0 transition-opacity duration-200">
        <!-- Header -->
        <div class="bg-gradient-to-r from-green-600 to-green-700 p-4 flex items-center justify-between rounded-t-xl">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center overflow-hidden p-1">
                        <img src="{{ asset('images/maxholdingslogowhitebg.png') }}" alt="Max" class="w-full h-full object-contain">
                    </div>
                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 border-2 border-white rounded-full"></div>
                </div>
                <div>
                    <h3 class="text-white font-semibold text-lg">Max</h3>
                    <p class="text-green-100 text-xs">Online</p>
                </div>
            </div>
            <button id="close-chat" class="text-white hover:bg-white/20 rounded-full p-2 transition-colors cursor-pointer">
                <i class="fas fa-times text-lg"></i>
            </button>
        </div>

        <!-- Messages -->
        <div class="bg-gray-50 p-6 min-h-[280px] max-h-[400px] overflow-y-auto">
            <div class="flex items-end gap-2 mb-4">
                <div class="w-8 h-8 rounded-full bg-green-600 flex items-center justify-center overflow-hidden flex-shrink-0">
                    <img src="{{ asset('images/maxholdingslogowhitebg.png') }}" alt="Max" class="w-full h-full object-contain">
                </div>
                <div class="bg-white rounded-xl rounded-bl-sm px-4 py-3 shadow-sm max-w-[85%]">
                    <p class="text-gray-800 text-sm leading-relaxed mb-2">Hey there! 👋</p>
                    <p class="text-gray-800 text-sm leading-relaxed mb-2">
                        Welcome to Max - your digital assistant from Max Holdings.
                    </p>
                    <p class="text-gray-800 text-sm leading-relaxed mb-2">
                        How can I assist you today? 😊
                    </p>
                    <p class="text-gray-800 text-sm leading-relaxed">
                        Let me know what you need help with, and I'll make sure you get the right solution.
                    </p>
                    <span class="text-xs text-gray-400 mt-2 block">Just now</span>
                </div>
            </div>
        </div>

        <!-- Input Area -->
        <div class="bg-white border-t border-gray-100 p-4 rounded-b-xl">
            <div class="flex items-center gap-3">
                <input 
                    type="text" 
                    id="chat-input"
                    placeholder="Type your message..." 
                    class="flex-1 px-4 py-3 bg-gray-50 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all cursor-text"
                >
                <button 
                    id="send-message"
                    class="bg-green-600 hover:bg-green-700 text-white rounded-full p-3 flex items-center justify-center transition-colors cursor-pointer shadow-md"
                >
                    <i class="fas fa-paper-plane text-base"></i>
                </button>
            </div>
            <p class="text-xs text-gray-400 mt-2 text-center flex items-center justify-center gap-1">
                <i class="fab fa-whatsapp"></i> Powered by WhatsApp
            </p>
        </div>
    </div>

    <!-- Floating Button -->
    <button 
        id="whatsapp-button" 
        class="bg-green-600 hover:bg-green-700 text-white rounded-full shadow-xl transition-all cursor-pointer flex items-center justify-center w-16 h-16"
    >
        <div class="relative flex items-center justify-center">
            <i id="whatsapp-icon" class="fab fa-whatsapp text-4xl transition-opacity duration-200"></i>
            <i id="close-icon" class="fas fa-times text-3xl absolute opacity-0 transition-opacity duration-200"></i>
            <div class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                1
            </div>
        </div>
    </button>

    <!-- Tooltip -->
    <div id="chat-tooltip" class="absolute bottom-20 right-0 bg-gray-900 text-white px-4 py-2 rounded-lg shadow-xl text-sm font-medium whitespace-nowrap opacity-0 pointer-events-none transition-opacity duration-200">
        Chat with us!
        <div class="absolute -bottom-1 right-6 w-2 h-2 bg-gray-900 transform rotate-45"></div>
    </div>
</div>

<style>
    #chat-box .overflow-y-auto::-webkit-scrollbar {
        width: 6px;
    }
    
    #chat-box .overflow-y-auto::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    #chat-box .overflow-y-auto::-webkit-scrollbar-thumb {
        background: #10b981;
        border-radius: 10px;
    }

    #chat-box.show {
        opacity: 1;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const whatsappButton = document.getElementById('whatsapp-button');
        const chatBox = document.getElementById('chat-box');
        const closeChat = document.getElementById('close-chat');
        const sendMessage = document.getElementById('send-message');
        const chatInput = document.getElementById('chat-input');
        const tooltip = document.getElementById('chat-tooltip');
        const whatsappIcon = document.getElementById('whatsapp-icon');
        const closeIcon = document.getElementById('close-icon');
        
        const phoneNumber = '94777893778';
        
        // Show tooltip on hover
        whatsappButton.addEventListener('mouseenter', function() {
            if (!chatBox.classList.contains('show')) {
                tooltip.style.opacity = '1';
            }
        });
        
        whatsappButton.addEventListener('mouseleave', function() {
            tooltip.style.opacity = '0';
        });
        
        // Toggle chat box
        whatsappButton.addEventListener('click', function() {
            if (chatBox.classList.contains('show')) {
                chatBox.classList.remove('show');
                setTimeout(() => {
                    chatBox.classList.add('hidden');
                }, 200);
                whatsappIcon.style.opacity = '1';
                closeIcon.style.opacity = '0';
            } else {
                chatBox.classList.remove('hidden');
                setTimeout(() => {
                    chatBox.classList.add('show');
                }, 10);
                whatsappIcon.style.opacity = '0';
                closeIcon.style.opacity = '1';
            }
        });
        
        // Close chat
        closeChat.addEventListener('click', function() {
            chatBox.classList.remove('show');
            setTimeout(() => {
                chatBox.classList.add('hidden');
            }, 200);
            whatsappIcon.style.opacity = '1';
            closeIcon.style.opacity = '0';
        });
        
        // Send message function
        function sendWhatsAppMessage() {
            const message = chatInput.value.trim();
            if (message) {
                const encodedMessage = encodeURIComponent(message);
                const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
                window.open(whatsappUrl, '_blank');
                chatInput.value = '';
            }
        }
        
        // Send on button click
        sendMessage.addEventListener('click', sendWhatsAppMessage);
        
        // Send on Enter key
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendWhatsAppMessage();
            }
        });
    });
</script>