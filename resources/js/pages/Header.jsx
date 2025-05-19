// resources/js/components/Header.js
import React from 'react';
import "../../css/headercss.css";  // استيراد ملف CSS
//import Login from "./components/Login.jsx";
import { Link } from "react-router-dom";



//             يرجي التعلديل


export default function Header() {
  return (
    <header className='headercss'>

       <div className="login-section">
 <Link to="/login">
        <button>اذهب إلى تسجيل الدخول</button>
      </Link>
      </div>
     
      <nav className='navigation'>
         <Link to="/">الرئيسية</Link>   
          <Link to="/about">عن الموقع</Link>   
        <a href="/courses">كورسات </a>
        <Link to="/admindashboard">الدورات</Link>   
        <Link to="/register">تسجيل حساب جديد</Link>   
      </nav>

      
      <div className='logo'>
        <h1> امل للتعليم </h1>
      </div>

    </header>
  );
}




