import React, { useState } from "react";
import axios from "axios";
import "../../css/login.css";

const Login = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [message, setMessage] = useState("");

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await axios.post("http://localhost:8000/api/login", {
        email,
        password,
      });

      setMessage("تم تسجيل الدخول بنجاح!");
      console.log(response.data);

    } catch (error) {
      setMessage("خطأ في تسجيل الدخول، تحقق من البريد أو كلمة المرور.");
    }
  };

  return (
    <div>
      <form onSubmit={handleSubmit}>
        <h2>تسجيل الدخول</h2>

        <input
          type="email"
          placeholder="البريد الإلكتروني"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
          required
        />

        <input
          type="password"
          placeholder="كلمة المرور"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
          required
        />

        <button type="submit">دخول</button>
      </form>

      {message && <p>{message}</p>}
    </div>
  );
};

export default Login;
