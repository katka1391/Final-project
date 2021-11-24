import React from 'react';

const Filter = ({
    categories,
    setSearchTerm,
    ingredients,
    loadingIngredients,
    loadingCategories,
    handleMealFilterClick,
    handleDietaryFilterClick,
    handleCuisineFilterClick,
    handleIngredientClick,
    dietaryFilter,
    mealFilter,
    cuisineFilter,
    ingredientFilter
}) => {

    
    return (
        <div className="recipes-rightSite">
            <div>
                <label htmlFor="search-recipes">Search Recipe Titles:</label>
                <br />
                <input
                    type="text"
                    id="search-recipes"
                />
                <button onClick={() => setSearchTerm(document.getElementById('search-recipes').value)}>Search</button>
            </div>

            <h4>Filter Recipes:</h4>

            {loadingIngredients || loadingCategories ? (
                <div>loading...</div>
            ) : (
                <>
                    <p>
                        Check one boxe below to narrow recipe search:
                    </p>
                    <br />
                    <br />

                    <h5>BY DIARY REQUIREMENT</h5>

                    {categories['dietary requirement'].map(
                        (dietaryType, index) => (
                            <div key={index}>
                                <input
                                    type="checkbox"
                                    checked={dietaryFilter === dietaryType}
                                    id={`filter-${dietaryType}`}
                                    onClick={() =>
                                        handleDietaryFilterClick(dietaryType)
                                    }
                                />
                                <label htmlFor={`filter-${dietaryType}`}>
                                    {dietaryType}
                                </label>
                                <br />
                            </div>
                        )
                    )}
                    <br />

                    <h5>BY MEAL TYPE</h5>

                    {categories.meal.map((mealType, index) => (
                        <div key={index}>
                            <input
                                type="checkbox"
                                checked={mealFilter === mealType}
                                id={`filter-${mealType}`}
                                onClick={() => handleMealFilterClick(mealType)}
                            />
                            <label htmlFor={`filter-${mealType}`}>
                                {mealType}
                            </label>
                            <br />
                        </div>
                    ))}
                    <br />

                    <h5>BY CUISINE</h5>

                    {categories.cuisine.map((cuisineType, index) => (
                        <div key={index}>
                            <input
                                type="checkbox"
                                checked={cuisineFilter === cuisineType}
                                id={`filter-${cuisineType}`}
                                onClick={() => handleCuisineFilterClick(cuisineType)}
                            />
                            <label htmlFor={`filter-${cuisineType}`}>
                                {cuisineType}
                            </label>
                            <br />
                        </div>
                    ))}
                    <br />

                    <h5>BY INGREDIENTS</h5>

                    {ingredients.map((ingredient, index) => (
                        <div key={index}>
                            <input
                                type="checkbox"
                                checked={ingredientFilter === ingredient.name}
                                id={`filter-${ingredient.name}`}
                    
                                onClick={() => handleIngredientClick(ingredient.name)}
                            />
                            <label htmlFor={`filter-${ingredient.name}`}>
                                {ingredient.name}
                            </label>
                            <br />
                        </div>
                    ))}
                </>
            )}
        </div>
    );
};

export default Filter;
