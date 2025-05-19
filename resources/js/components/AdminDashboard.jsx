import React, { useEffect, useState } from 'react';

function Dashboard() {
  const [data, setData] = useState(null);

  useEffect(() => {
    fetch('http://localhost:8000/api/dashboard-data', {
      headers: {
        'Authorization': `Bearer ${localStorage.getItem('token')}` // إذا تستخدم توكن المصادقة
      }
    })
    .then(res => res.json())
    .then(data => setData(data))
    .catch(err => console.error('Error fetching dashboard data:', err));
  }, []);

  if (!data) return <div>جارٍ التحميل...</div>;

  return (
    <div>
      <h1>لوحة التحكم</h1>
      <p>عدد المستخدمين: {data.users_count}</p>
      <p>عدد الدورات: {data.courses_count}</p>
      {/* اعرض البيانات حسب حاجتك */}
    </div>
  );
}

export default Dashboard;
