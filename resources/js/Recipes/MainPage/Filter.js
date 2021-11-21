import React from 'react';


const Filter = ({categories, setSearchTerm, ingredients, loadingIngredients, loadingCategories}) => {
   
   

    return (
        <form className="recipes-rightSite">
            <div>
                <label htmlFor="search-recipes">Search Recipe Titles:</label>
                <br />
                <input
                    type="text"
                    id="search-recipes"
                    onChange={(event) => setSearchTerm(event.target.value)}
                />
            </div>

            <h4>Filter Recipes:</h4>

            {loadingIngredients && loadingCategories ? (
                <div>!!!!!!!!I am going to proper loading spiner here</div>
            ) : (
                <>
                    <p>
                        Check multiple boxes below to narrow recipe search
                        results:
                    </p>
                    <br />
                    <br />

                    <h5>BY DIARY REQUIREMENT</h5>

                    {categories['dietary requirement'].map(
                        (dietaryType, index) => (
                            <div key={index}>
                                <input
                                    type="checkbox"
                                    id={`filter-${dietaryType}`}
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
                            <input type="checkbox" id={`filter-${mealType}`} />
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
                                id={`filter-${cuisineType}`}
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
                                id={`filter-${ingredient.name}`}
                            />
                            <label htmlFor={`filter-${ingredient.name}`}>
                                {ingredient.name}
                            </label>
                            <br />
                        </div>
                    ))}
                </>
            )}
        </form>
    );
};

export default Filter;
