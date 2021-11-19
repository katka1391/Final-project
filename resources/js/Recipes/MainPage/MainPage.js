import React from 'react';
import AllRecipes from './AllRecipes';
import Filter from './Filter';

const MainPage = () => {
    

    return (
        <div className="recipes-main-container">
            <AllRecipes/>
            <Filter/>
        </div>
    );
};

export default MainPage;
