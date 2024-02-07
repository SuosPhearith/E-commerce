import axios from "axios";

async function fetchData(method, url, data) {
  try {
    const token = localStorage.getItem("token");
    // if (!token) {
    //   window.location.href = "/auth/login";
    //   return;
    // }

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
    if (error.response && error.response.status === 401) {
      window.location.href = "/auth/login";
      return;
    }
    console.error("Error fetching data:", error);
    throw error;
  }
}

export default fetchData;
