#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MAX_MOVIES 8
#define MAX_JUDGES 5

// Structure to represent a movie with its ratings
typedef struct
{
    char name[50];
    int ratings[MAX_JUDGES];
    double average_rating;
} Movie;

// Function to get ratings from judges for a movie
void getRatings(Movie *movie)
{
    printf("Enter ratings for movie '%s' (1-10) by %d judges:\n", movie->name, MAX_JUDGES);
    for (int i = 0; i < MAX_JUDGES; i++)
    {
        do
        {
            printf("Judge %d: ", i + 1);
            scanf("%d", &movie->ratings[i]);
        } while (movie->ratings[i] < 1 || movie->ratings[i] > 10);
    }
}

int main()
{
    Movie movies[MAX_MOVIES];

    // Define the list of nominated movies
    strcpy(movies[0].name, "Nayak: The Hero");
    strcpy(movies[1].name, "The Cloud-Capped Star");
    strcpy(movies[2].name, "The Music Room");
    strcpy(movies[3].name, "Pather Panchali");
    strcpy(movies[4].name, "Charulata");
    strcpy(movies[5].name, "Subarnarekha");
    strcpy(movies[6].name, "Days and Nights in the Forest");
    strcpy(movies[7].name, "The Unnamed");

    // Get ratings for each movie
    for (int i = 0; i < MAX_MOVIES; i++)
    {
        getRatings(&movies[i]);
    }

    // Calculate average ratings for each movie
    for (int i = 0; i < MAX_MOVIES; i++)
    {
        double sum = 0;
        for (int j = 0; j < MAX_JUDGES; j++)
        {
            sum += movies[i].ratings[j];
        }
        movies[i].average_rating = sum / MAX_JUDGES;
    }

    // Sort movies in ascending order based on ratings using pointers
    for (int i = 0; i < MAX_MOVIES; i++)
    {
        for (int j = i + 1; j < MAX_MOVIES; j++)
        {
            if (movies[i].average_rating > movies[j].average_rating)
            {
                Movie temp = movies[i];
                movies[i] = movies[j];
                movies[j] = temp;
            }
        }
    }

    // Display the sorted movies and their ratings
    printf("Movies and their ratings in ascending order:\n");
    for (int i = 0; i < MAX_MOVIES; i++)
    {
        printf("%s: %.2f\n", movies[i].name, movies[i].average_rating);
    }

    return 0;
}
