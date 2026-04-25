const messages = [
    "Stay positive!! 👋",
    "Please be patient! 😊",
    "Trade Bot jus claimed profit at +$200! 😊",
    "Trading Massively! 😊",
    "Trade Bot ascends with +$500! 🚀",
    "You're doing great! 🌟",
    "Trade Bot hitting massive profit trade ! 🍻🔐",
    "Trade Bot decends at -$75!😡",
    "Take a deep breath. 🙂‍↔️",
    "Trade Bot lost at -$140!😭",
    "Trade Bot took massive rise by +$750! 🤑",
    "You got this! 😇",
    "Trade Bot skyrocketted by +$170! 🚀",
  ];

  const messageEl = document.getElementById("message");

  function showRandomMessage() {
    const randomText = messages[Math.floor(Math.random() * messages.length)];

    // Reset opacity to 0 before fade-in
    messageEl.style.opacity = 0;

    setTimeout(() => {
      messageEl.textContent = randomText;
      void messageEl.offsetWidth; // force reflow
      messageEl.style.opacity = 1;
    }, 100);
  }

  // Start on page load
  window.onload = function () {
    showRandomMessage(); // Show immediately
    setInterval(showRandomMessage, 5000); // Repeat every 3 seconds
  };
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  