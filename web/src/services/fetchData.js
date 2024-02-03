// import axios from "axios";

// async function fetchData(method, url, data) {
//   try {
//     const token =
//       "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL3YxL2F1dGgvbG9naW4iLCJpYXQiOjE3MDY4NzI5NjAsImV4cCI6MTcwNjg3NjU2MCwibmJmIjoxNzA2ODcyOTYwLCJqdGkiOiJhajZZTDBZUkRHOTNaZjJXIiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.1fdp9r7u_twNz5hNOIvcUeKgPYuCIsfwdIsO4F7YzQo";
//     const headers = {
//       Authorization: `Bearer ${token}`,
//       "Content-Type": "application/json",
//       Accept: "application/json",
//     };
//     const response = await axios({
//       method: method,
//       url: url,
//       data: data,
//       headers: headers,
//     });
//     return response.data;
//   } catch (error) {
//     console.error("Error fetching data:", error);
//     throw error;
//   }
// }
// export default fetchData;

import axios from "axios";

async function fetchData(method, url, data) {
  try {
    // Retrieve the token from localStorage
    const token = localStorage.getItem("token");

    // If token is not available, redirect to login page
    if (!token) {
      window.location.href = "/auth/login";
      return;
    }

    const headers = {
      Authorization: `Bearer ${token}`,
      "Content-Type": "application/json",
      Accept: "application/json",
    };
    const response = await axios({
      method: method,
      url: url,
      data: data,
      headers: headers,
    });
    return response.data;
  } catch (error) {
    // Handle unauthorized error (status 401)
    if (error.response && error.response.status === 401) {
      // Redirect to login page
      window.location.href = "/auth/login";
      return;
    }
    console.error("Error fetching data:", error);
    throw error;
  }
}

// Add an interceptor to handle unauthorized responses globally
// axios.interceptors.response.use(
//   (response) => response,
//   (error) => {
//     if (error.response && error.response.status === 401) {
//       // Redirect to login page
//       window.location.href = "/auth/login";
//     }
//     return Promise.reject(error);
//   }
// );

export default fetchData;
