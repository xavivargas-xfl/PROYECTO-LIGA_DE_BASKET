import * as React from "react";
import { Routes, Route, Link } from "react-router-dom";
import {Nav} from "react-bootstrap"
import "./App.css";
import Formjugador from './vistas/Formjugador';
import Formjuez from './vistas/Formjuez';
import Login from './vistas/Login';

function App() {
  return (
    <div className="App">
      <h1>Liga de Basquet</h1>
      <header>
          <div className="container">
            <nav className="navbar navbar-expand-lg navbar-light bg-light">
              <Nav.Link as = {Link} to ={"/"}><span>Inicio</span></Nav.Link>
              <div className="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul className="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li className="nav-item active">
                    <Nav.Link as = {Link} to ={"form-jugador"}><span>Registrar jugador</span></Nav.Link>
                    </li>
                    <li className="nav-item">
                    <Nav.Link as = {Link} to ={"/form-juez"}><span>Registrar Juez </span></Nav.Link>
                    </li>
                    <li className="nav-item">
                    <Nav.Link as = {Link} to ={"/login"}><span>login</span></Nav.Link>
                    </li>
                  </ul>
                    
                </div>
            </nav>
          </div>
      </header>
    
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="about" element={<About />} />
        <Route path="form-jugador" element={<Formjugador />} />
        <Route path="form-juez" element={<Formjuez />} />
        <Route path="login" element={<Login />} />
      </Routes>
    </div>
  );
}



// App.js
function Home() {
  return (
    <>
      <main>
        <h2>Welcome to the homepage!</h2>
        <p>You can do this, I believe in you.</p>
        <div>
        <h2>Welcome to the homepage!</h2>
        </div>
      </main>
      <nav>
        <Link to="/about">About</Link><br></br>
        <Link to="/form-jugador">registrar jugador</Link>
      </nav>
    </>
  );
}

function About() {
  return (
    <>
      <main>
        <h2>Who are we?</h2>
        <p>
          That feels like an existential question, don't you
          think?
        </p>
      </main>
      <nav>
        <Link to="/">Home</Link>
      </nav>
    </>
  );
}


export default App;