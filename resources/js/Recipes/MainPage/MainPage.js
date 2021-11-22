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

    const [dietaryFilter, setDietaryFilter] = useState('');
    const [mealFilter, setMealFilter] = useState('');
    const [cuisineFilter, setCuisineFilter] = useState('');

    const loadRecipesData = async () => {
        const url = 'api/recipes';

        // use our predefined get function
        // to make a GET http request
        // get an axios response object
        const response = await get(url);

        setRecipes(response.data);
    };

    useEffect(() => {
        loadRecipesData();
    }, []);

    const loadCategoriesData = async () => {
        const url = 'api/categories';
        const response = await get(url);
        setCategories(response.data);
        setLoadingCategories(false);
    };

    useEffect(() => {
        loadCategoriesData();
    }, []);

    const loadIngredientsData = async () => {
        const url = 'api/ingredients';
        const response = await get(url);
        setIngredients(response.data);
        setLoadingIngredients(false);
    };

    useEffect(() => {
        loadIngredientsData();
    }, []);

    const handleMealFilterClick = (item) => {
        if (mealFilter === item) {
            setMealFilter('');
        } else {
            setMealFilter(item);
        }
    };

    const handleDietaryFilterClick = (item) => {
        if (dietaryFilter === item) {
            setDietaryFilter('');
        } else {
            setDietaryFilter(item);
        }
    };

    const handleCuisineFilterClick = (item) => {
        if (cuisineFilter === item) {
            setCuisineFilter('');
        } else {
            setCuisineFilter(item);
        }
    };

    let filteredRecipes = [];

    if (!mealFilter && !dietaryFilter && !cuisineFilter) {
        filteredRecipes = recipes;
    }

    if (mealFilter) {
        recipes.forEach((recipe) => {
            recipe.categories.forEach((category) => {
                if (category.name === mealFilter) {
                    // .find returns undefined if it cannot find the value( the variable -> recipe.name) in the filtered array
                    if (
                        !filteredRecipes.find(
                            (filteredRecipe) =>
                                filteredRecipe.name === recipe.name
                        )
                    ) {
                        filteredRecipes.push(recipe);
                    }
                }
            });
        });

        console.log('filteredRecipes -> meal', filteredRecipes);
    }

    if (dietaryFilter) {
        recipes.forEach((recipe) => {
            recipe.categories.forEach((category) => {
                if (category.name === dietaryFilter) {
                    if (
                        !filteredRecipes.find(
                            (filteredRecipe) =>
                                filteredRecipe.name === recipe.name
                        )
                    ) {
                        filteredRecipes.push(recipe);
                    }
                }
            });
        });
    }

    if (cuisineFilter) {
        recipes.forEach((recipe) => {
            recipe.categories.forEach((category) => {
                if (category.name === cuisineFilter) {
                    if (
                        !filteredRecipes.find(
                            (filteredRecipe) =>
                                filteredRecipe.name === recipe.name
                        )
                    ) {
                        filteredRecipes.push(recipe);
                    }
                }
            });
        });
    }

    return (
        <div className="recipes-main-container">
            <AllRecipes filteredRecipes={filteredRecipes} />
            <Filter
                categories={categories}
                setSearchTerm={setSearchTerm}
                ingredients={ingredients}
                loadingCategories={loadingCategories}
                loadingIngredients={loadingIngredients}
                handleMealFilterClick={handleMealFilterClick}
                handleDietaryFilterClick={handleDietaryFilterClick}
                handleCuisineFilterClick={handleCuisineFilterClick}
                dietaryFilter={dietaryFilter}
                mealFilter={mealFilter}
                cuisineFilter={cuisineFilter}
            />
        </div>
    );
};

export default MainPage;
