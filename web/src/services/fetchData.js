// Import Axios library
import axios from "axios";

// Define your function
async function fetchData(method, url, data) {
  try {
    // Define headers with authorization and content type
    const token =
      "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL3YxL2F1dGgvbG9naW4iLCJpYXQiOjE3MDY2NzI4MjksImV4cCI6MTcwNjY3NjQyOSwibmJmIjoxNzA2NjcyODI5LCJqdGkiOiJzVkhwc1diYXZJRmgwRlc5Iiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.XLx7uUrWGVWpxo5f0jgY0vGdbV7qlL9dwYJ3mdIt4Pc";
    const headers = {
      Authorization: `Bearer ${token}`,
      "Content-Type": "application/json",
      Accept: "application/json",
    };

    // Make the HTTP request using Axios
    const response = await axios({
      method: method, // HTTP method (GET, POST, PUT, DELETE, etc.)
      url: url, // URL to fetch data from
      data: data, // Data to be sent with the request (if any)
      headers: headers, // Include headers in the request
    });

    // Return the response data
    return response.data;
  } catch (error) {
    // Handle errors
    console.error("Error fetching data:", error);
    throw error; // Re-throw the error to be caught elsewhere, if needed
  }
}

// Export the function for use in Vue components
export default fetchData;
