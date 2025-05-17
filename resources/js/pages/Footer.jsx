import React from 'react';
import '../../css/footer.css';

const Footer = () => {
  return (
    <footer className="footer">
      <div className="footer-container">
        <div className="footer-section">
          <h2>عن الشركة</h2>
          <p>
            نحن شركة متخصصة في تطوير البرمجيات باستخدام React وLaravel لتقديم حلول متميزة.
          </p>
        </div>
        <div className="footer-section">
          <h2>روابط سريعة</h2>
          <ul>
            <li><a href="/">الرئيسية</a></li>
            <li><a href="/about">من نحن</a></li>
            <li><a href="/services">الخدمات</a></li>
            <li><a href="/contact">تواصل معنا</a></li>
          </ul>
        </div>
        <div className="footer-section">
          <h2>تابعنا</h2>
          <div className="social-links">
            <a href="#">فيسبوك</a>
            <a href="#">تويتر</a>
            <a href="#">إنستغرام</a>
          </div>
        </div>
      </div>
      <div className="footer-bottom">
        © {new Date().getFullYear()} جميع الحقوق محفوظة.
      </div>
    </footer>
  );
};

export default Footer;
