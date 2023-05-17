class User {
    public int Id { get; set; }
    public string Name { get; set; }
    public int Age { get; set; }
    public float Weight { get; set; }
    public float Height { get; set; }
    public string Gender { get; set; }
    public Workout WorkoutFK { get; set; }
    public Nutrition NutritionFK { get; set; }
}

class Exercise {
    public int Id { get; set; }
    public string Name { get; set; }
	public int quantity { get; set; }
	public int repeats { get; set; }
}

class Workout {
    public int Id { get; set; }
    public string Name { get; set; }
    public List<Exercise> Exercises { get; set; }
    public int DayOfWeek { get; set; }
    public int Duration { get; set; }
	public int BurnedCalories { get; set; }
}

class Nutrition {
    public int Id { get; set; }
    public int Calories { get; set; }
    public int Water { get; set; }
    public int Steps { get; set; }
}

class Stat {
	public int Id { get; set; }
    public Date Interval { get; set; }
    public List<Workout> Workouts { get; set; }
    public List<Nutrition> Nutritions { get; set; }
}