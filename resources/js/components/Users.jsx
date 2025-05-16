

// resources/js/components/Users.jsx

import React , {useEffect , useState} from 'react';
import axios from 'axios';




function Users() {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    axios.get('http://localhost:8000/api/users')
      .then(response => {
        setUsers(response.data);
      })
      .catch(error => {
        console.error('API Error:', error);
      });
  }, []);

  return (
    <div>
      <h1>قائمة المستخدمين</h1>
      <ul>
        {users.map(user => (
          <li key={user.id}>{user.name}</li>
        ))}
      </ul>
    </div>
  );
}

export default Users;