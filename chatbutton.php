
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<style>
	.chat-icon {
    position: fixed;
    bottom: 20px;
    right: 20px;
    cursor: pointer;
    z-index: 1000;
}
</style>
</head>
<body>
	<!-- Update the link to include the referring page URL -->
	<!-- Update the link to include the referring page URL -->
    <div class="chat-icon" onclick="openChatbot ()">
         <img src="img/chatbot.svg" alt="Chat Icon">
    </div>
</body>
 <script>
    	function openChatbot() {
        // Open the chatbot.html page in a new window or tab
        window.open('\chatbot.php', '_blank');
        }
		// Define the scrollToMain function
		function scrollToMain() {
			const mainSection = document.getElementById('mainSection');
			if (mainSection) {
				const offset = mainSection.getBoundingClientRect().top + window.scrollY - 20;
				window.scrollTo({
					top: offset,
					behavior: 'smooth'
				});
			}
		}
</script>