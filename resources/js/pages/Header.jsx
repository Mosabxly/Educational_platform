// resources/js/components/Header.js
import React from 'react';
import "../../css/headercss.css";  // استيراد ملف CSS
//import Login from "./components/Login.jsx";
import { Link } from "react-router-dom";
export default function Header() {
  return (
    <header className='headercss'>

       <div className="login-section">
 <Link to="/login">
        <button>اذهب إلى تسجيل الدخول</button>
      </Link>
      </div>
     
      <nav className='navigation'>
         <a href="/">الرئيسية</a>
        <a href="/about">عن المنصة</a>
        <a href="/courses">الدورات</a>
        <a href="/contact">تواصل معنا</a>
      </nav>

      
      <div className='logo'>
        <h1> امل للتعليم </h1>
      </div>

    </header>
  );
}




