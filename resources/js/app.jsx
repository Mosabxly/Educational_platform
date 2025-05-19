import './bootstrap';
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import ReactDOM from 'react-dom/client';

import { Link } from "react-router-dom";

import MainPage from './pages/MainPage.jsx';
import Header from './pages/Header.jsx';
import Footer from './pages/Footer.jsx';
import AdminDashboard from '../js/components/AdminDashboard.jsx';
//imoprt AdminDashboard form './compoents/'

import Register from "../js/components/Register.jsx";
import Login from "../js/components/Login.jsx" ;
//import Users from '../components/Users.jsx';
const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <Router>
    <Header />

    
    <main style={{ padding: '20px' }}>
       
  <Routes>
        <Route path="/" element={<MainPage />} />
        <Route path="/login" element={<Login />} />
        <Route path="/register" element={<Register />} />
        <Route path="/admindashboard" element={<AdminDashboard />} />
      </Routes>

    </main>
    <Footer />
  </Router>
);
