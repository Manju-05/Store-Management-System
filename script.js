//code for index page table 

document.addEventListener("DOMContentLoaded", function () {
    // Sample data (replace this with your actual data)
    const stockData = [
        { item: "Main Answer sheets", totalStock: 100 },
      { item: "Additional Papers", totalStock: 500 },
      { item: "Packing Covers", totalStock: 50 },
      { item: "Thread Bundles", totalStock: 400 },
      // Add more items as needed
    ];
  
    // Populate the table with stock data
    const stockTableBody = document.getElementById("stockTableBody");
    stockData.forEach((item) => {
      stockTableBody.innerHTML += `
        <tr>
          <td>${item.item}</td>
          <td>${item.totalStock}</td>
        </tr>
      `;
    });
  
    // Prepare data for the chart
    const labels = stockData.map((item) => item.item);
    const data = stockData.map((item) => item.totalStock);
  
    // Create the chart using Chart.js
    const ctx = document.getElementById("stockChart").getContext("2d");
    new Chart(ctx, {
      type: "bar", // Change this to the desired chart type (e.g., "line", "pie", "doughnut", etc.)
      data: {
        labels: labels,
        datasets: [
          {
            label: "Total Stock",
            data: data,
            backgroundColor: "rgba(54, 162, 235, 0.6)", // Change the color as needed
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  });