import React, { useEffect, useState } from 'react';
import AllRecipes from './AllRecipes';
import { get } from '../../util/request';
import Filter from './Filter';

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
    const [ingredientFilter, setIngredientFilter] = useState('');

    const loadRecipesData = async () => {
        const url = 'api/recipes/search?search=' + encodeURIComponent(searchTerm);

        // use our predefined get function
        // to make a GET http request
        // get an axios response object
        const response = await get(url);

        setRecipes(response.data);
    };

    useEffect(() => {
        loadRecipesData();
    }, [searchTerm]);

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

    const handleIngredientClick = (item) => {
        if (ingredientFilter === item) {
            setIngredientFilter('');
        } else {
            setIngredientFilter(item);
        }
    };

    let filteredRecipes = [];

    if (!mealFilter && !dietaryFilter && !cuisineFilter && !ingredientFilter) {
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

    if (ingredientFilter) {
        recipes.forEach((recipe) => {
            recipe.ingredients.forEach((ingredient) => {
                console.log('ingredient', ingredient);
                console.log('ingredient.name', ingredient.name);
                console.log('ingredientFilter', ingredientFilter);
                if (ingredient.name === ingredientFilter) {
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
        console.log('filteredRecipes after ingredient filter if', filteredRecipes)
    }



    return (
        <div className="recipes-main-container">
            <AllRecipes recipes={filteredRecipes} />
            <Filter
                categories={categories}
                setSearchTerm={setSearchTerm}
                ingredients={ingredients}
                loadingCategories={loadingCategories}
                loadingIngredients={loadingIngredients}
                handleMealFilterClick={handleMealFilterClick}
                handleDietaryFilterClick={handleDietaryFilterClick}
                handleCuisineFilterClick={handleCuisineFilterClick}
                handleIngredientClick={handleIngredientClick}
                ingredientFilter={ingredientFilter}
                dietaryFilter={dietaryFilter}
                mealFilter={mealFilter}
                cuisineFilter={cuisineFilter}
            />
        </div>
    );
};

export default MainPage;
