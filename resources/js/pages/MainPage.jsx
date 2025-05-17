import React from "react";
import "../../css/MainPage.css";

const courses = [
  {
    id: 1,
    title: "دورة React للمبتدئين",
    description: "تعلم أساسيات React لبناء واجهات تفاعلية.",
    image: "https://via.placeholder.com/300x180?text=React",
  },
  {
    id: 2,
    title: "دورة JavaScript متقدمة",
    description: "تعلم مفاهيم متقدمة في JavaScript.",
    image: "https://via.placeholder.com/300x180?text=JavaScript",
  },
  {
    id: 3,
    title: "تصميم واجهات المستخدم UI/UX",
    description: "تعلم تصميم تجربة المستخدم واجهات جذابة.",
    image: "https://via.placeholder.com/300x180?text=UI/UX",
  },
  // يمكنك إضافة المزيد من الدورات هنا
];

export default function MainPage() {
  return (
    <div className="main-container">
      <div className="hero-section">
        <h1>منصة أمل التعليمية</h1>
        <p>تعلم، تطور، وحقق أحلامك معنا</p>
      </div>

      <div className="courses-section">
        {courses.map((course) => (
          <div key={course.id} className="course-card">
            <img src={course.image} alt={course.title} />
            <h3>{course.title}</h3>
            <p>{course.description}</p>
            <button>اشترك الآن</button>
          </div>
        ))}
      </div>
    </div>
  );
}
