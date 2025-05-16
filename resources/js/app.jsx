import './bootstrap';



import ReactDOM from 'react-dom/client';
import Header from './pages/Header.jsx';


import Users from './components/Users.jsx';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <>
    <Header />
    <main style={{ padding: '20px' }}>
      <h2>مرحباً بك في المنصة التعليمية</h2>
      <p>هنا يمكنك عرض المحتويات المختلفة للصفحة.</p>


      <br>
      </br>
      <br>
      </br>
      <br>
      </br>
      <Users />


    </main>
  </>
);