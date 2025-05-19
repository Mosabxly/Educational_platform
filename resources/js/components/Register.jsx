import React, { useState } from "react";

import "../../css/Register.css"

export default function Register() {
  const [form, setForm] = useState({
    name: "",
    email: "",
    password: ""
  });

  const handleChange = (e) => {
    setForm({ ...form, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await fetch("http://localhost:8000/api/Register", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(form)
      });

      if (!response.ok) {
        throw new Error("فشل التسجيل");
      }

      const result = await response.json();
      console.log("تم التسجيل بنجاح:", result);
      // يمكنك التوجيه بعد التسجيل مثلا:
      // navigate("/login");
    } catch (error) {
      console.error("خطأ:", error.message);
    }
  };

  return (
    <form onSubmit={handleSubmit}>
      <input
        type="text"
        name="name"
        placeholder="الاسم"
        value={form.name}
        onChange={handleChange}
      />
      <input
        type="email"
        name="email"
        placeholder="البريد الإلكتروني"
        value={form.email}
        onChange={handleChange}
      />
      <input
        type="password"
        name="password"
        placeholder="كلمة المرور"
        value={form.password}
        onChange={handleChange}
      />
      <button type="submit">تسجيل</button>
    </form>
  );
}
