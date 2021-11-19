import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import MainPage from './MainPage/MainPage';
import Recipe from './Recipe/Recipe';



const App = () => {
    
    

    return (
        <BrowserRouter>
            <h1 className="title">Sweet Cuisine</h1>
            <Routes>

                <Route path="/recipes" element={<MainPage />} />
                <Route path="/recipes/:id" element={<Recipe />} />
            </Routes>
        </BrowserRouter>
        
    );
};

export default App;
