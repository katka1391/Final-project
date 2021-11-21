import React, { useEffect, useState } from 'react';
import AllRecipes from './AllRecipes';
import Filter from './Filter';
import { get } from '../../util/request';

const MainPage = () => {
    const [recipes, setRecipes] = useState([]);
    const [searchTerm, setSearchTerm] = useState('');
    const [categories, setCategories] = useState([]);
    const [ingredients, setIngredients] = useState([]);
    const [loadingCategories, setLoadingCategories] = useState(true);
    const [loadingIngredients, setLoadingIngredients] = useState(true);

    const loadRecipesData = async () => {
        const url = 'api/recipes';

        // use our predefined get function
        // to make a GET http request
        // get an axios response object
        const response = await get(url);

        console.log(response);
        setRecipes(response.data);
    };

    useEffect(() => {
        loadRecipesData();
    }, []);

    const loadCategoriesData = async () => {
        const url = 'api/categories';

        const response = await get(url);

        console.log(response.data);
        setCategories(response.data);
        setLoadingCategories(false);
    };

    useEffect(() => {
        loadCategoriesData();
    }, []);

    const loadIngredientsData = async () => {
        const url = 'api/ingredients';

        const response = await get(url);

        console.log(response.data);
        setIngredients(response.data);
        setLoadingIngredients(false);
    };

    useEffect(() => {
        loadIngredientsData();
    }, []);

    // let filteredRecipes = recipes.filter(recipe => {
    //     recipe.categories

    // })

    return (
        <div className="recipes-main-container">
            <AllRecipes recipes={recipes} />
            <Filter
                categories={categories}
                setSearchTerm={setSearchTerm}
                ingredients={ingredients}
                loadingCategories={loadingCategories}
                loadingIngredients={loadingIngredients}
            />
        </div>
    );
};

export default MainPage;
