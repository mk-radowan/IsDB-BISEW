import React, { useEffect } from 'react'
import Header from '../components/Header';

export default function Displaydata() {
    const [users, setUsers] = useState([]);
    useEffect (() => {
        fetch('https://jsonplaceholder.typicode.com/users')
        .then(res => res.json())
    })
    console.log(users)
  return (
    <><Header />
        <Navbar />
        <div>Display Data Form Server</div>
        <p>
            <ul className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        </p>
     </>
  )
}
