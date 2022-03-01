import { useState } from "react";
import {
  BrowserRouter as Router,
  Routes,
  Route
} from "react-router-dom";
import Burger from "./Components/Burger";
import Menu from "./Components/Menu";
import { Contact } from "./Pages/Contact";

import { Job } from "./Pages/Job";
import { Login } from "./Pages/Login";
import { Main } from "./Pages/Main";
import { Profile } from "./Pages/Profile";
import { Sign_job } from "./Pages/Sign_job";
import { Sign_up } from "./Pages/Sign_up";
import TestPage from "./Pages/testpage";


export function AppRoutes(){
    const [open, setOpen] = useState(false);

    return(
        <Router>
            <Menu open={open} setOpen={setOpen} />
            <Burger open={open} setOpen={setOpen} />

            <Routes>

                <Route path="/login" element={<Login />}/>
                <Route path="/sign_up" element={<Sign_up />}/>
                <Route path="/sign_job" element={<Sign_job />}/>
                <Route path="/" element={<Main />}/>
                <Route path="/job" element={<Job />}/>
                <Route path="/profile" element={<Profile />}/>
                <Route path="/test" element={<TestPage />}/>
                <Route path="/contact" element={<Contact />}/>
                <Route path="/job" element={<Job />}/>
            </Routes>
        </Router>
    )
}
