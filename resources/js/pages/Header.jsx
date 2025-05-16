// resources/js/components/Header.js
import React from 'react';
//import '../css/Header.css';  // استيراد ملف CSS

export default function Header() {
  return (
    <header className="header">
      <h1>المنصة التعليمية</h1>
      <nav>
        <a href="/">الرئيسية</a>
        <a href="/about">عن المنصة</a>
        <a href="/contact">تواصل معنا</a>
      </nav>
    </header>
  );
}
