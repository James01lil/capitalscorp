let prevRise = 0;
    let prevLow = 0;

    function updateFigures() {
      fetch('bottrade.php')
        .then(res => res.json())
        .then(data => {
          const riseEl = document.getElementById('rise');
          const lowEl = document.getElementById('low');

          // Update text
          riseEl.textContent = data.rise.toFixed(1);
          lowEl.textContent = data.low.toFixed(1);

          // Change color based on comparison
          riseEl.className = 'value ' + (data.rise >= prevRise ? 'rise' : 'fall');
          lowEl.className = 'value ' + (data.low >= prevLow ? 'rise' : 'fall');

          // Store current as previous for next check
          prevRise = data.rise;
          prevLow = data.low;
        });
    }

    setInterval(updateFigures, 300); // Update every 2 seconds
    updateFigures(); // Initial call
    
    
    
    
    
    
    
    
    
    
    
    const ctx = document.getElementById('myChart').getContext('2d');
    const candles = [];
    let lastClose = 100;
    let index = 0;

    // Looping pattern to control rise/fall
    const trendPattern = ["rise","rise","fall","fall","rise","rise", "hold", "rise","rise","fall","rise","hold","hold","fall","hold","fall","fall","hold","fall","rise","rise","fall","rise","rise","hold"];
    
    const chart = new Chart(ctx, {
      type: 'candlestick',
      data: {
        datasets: [{
          label: 'Fake Supertrend',
          data: candles
        }]
      },
      options: {
        responsive: true,
        animation: false,
        scales: {
          x: { type: 'linear' },
          y: { beginAtZero: false }
        }
      }
    });

    function generateCandle(i, direction) {
      const open = lastClose;
      let change = 0;

      if (direction === "rise") change = Math.random() * 5 + 2;
      else if (direction === "fall") change = -(Math.random() * 5 + 2);
      else change = Math.random() * 2 - 1; // small change

      const close = open + change;
      const high = Math.max(open, close) + Math.random() * 2;
      const low = Math.min(open, close) - Math.random() * 2;

      lastClose = close;
      return { x: i, o: open, h: high, l: low, c: close };
    }

    function displaySignal(direction) {
      const signalBox = document.getElementById("signal");
      if (direction === "rise") {
        signalBox.innerText = "RISE Signal: Buy";
        signalBox.style.color = "limegreen";
      } else if (direction === "fall") {
        signalBox.innerText = "FALL Signal: Sell";
        signalBox.style.color = "red";
      } else {
        signalBox.innerText = "HOLD: No change";
        signalBox.style.color = "gray";
      }
    }

    function updateChart() {
      const direction = trendPattern[index % trendPattern.length]; // loop forever
      const candle = generateCandle(index, direction);
      candles.push(candle);
      if (candles.length > 50) candles.shift(); // keep chart clean
      chart.update();
      displaySignal(direction);
      index++;
    }

    setInterval(updateChart, 1500); // new candle every 1.5 seconds
    
    
    
    
    
    
    

  
  
  setTimeout(() => {
    document.getElementById("nosignalstatus").style.display = "none";
  }, 0); // 3000ms = 3 seconds
    
    
    
    
    
    
    
    
    
    
    
 