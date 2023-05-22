# Laravel Scout and Algolia Search

This is a sample project demonstrating how to use Laravel Scout and Algolia to implement search functionality in a Laravel application.

## Prerequisites

- PHP >= 8.0
- Composer installed globally
- Algolia account and API credentials

## Installation

1. Clone the repository.
2. Update the `.env` file with your database.
3. Run the database migrations.
4. Import sample data  by seeder.
5. Open the `.env` file and update the following variables with your Algolia credentials:

    ALGOLIA_APP_ID=your-algolia-app-id
    ALGOLIA_SECRET=your-algolia-secret
    ALGOLIA_SEARCH_KEY=your-algolia-search-key
    
6. Configure the `config/scout.php` file with your Algolia credentials.
8. Add the `Searchable` trait to the model(s) you want to make searchable:

 ```php
  use Laravel\Scout\Searchable;

  class Product extends Model
  {
      use Searchable;

      // Rest of the model code...
  }
  ```
  
9. Run the indexing command to populate the search index:
  ```
  $ php artisan scout:import
  ```
10. searches using the `search()` method on your model:
 ```php
  $results = Product::search('keyword')->get();
  ```
