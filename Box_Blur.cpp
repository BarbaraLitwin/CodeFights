#The algorithm works as follows: each pixel x in the resulting image has a value equal to the average value 
#of the input image pixels' values from the 3 × 3 square with the center at x. All pixels at the edges are cropped.
#As pixel's value is an integer, all fractions should be rounded down.
#Example
#For
#image = [[1, 1, 1], 
#         [1, 7, 1], 
#         [1, 1, 1]]
#the output should be boxBlur(image) = [[1]].
#In the given example all boundary pixels were cropped, and the value of the pixel in the middle was obtained as 
#(1 + 1 + 1 + 1 + 7 + 1 + 1 + 1 + 1) / 9 = 15 / 9 = 1.66666 = 1. The border pixels are cropped from the final result.


std::vector<std::vector<int>> boxBlur(std::vector<std::vector<int>> image) {
	int lenght=image.size()-2;
	int width=image[0].size()-2;
	vector<vector<int>> v1(lenght, vector<int>(width,0));
	for(int i=0;i<image.size();i++)
	{
		for(int j=0;j<image[i].size();j++)
		{

		if((i+3)<=image.size()&&image[i].size()>=j+3)
		{
			int blur=(image[i][j]+image[i][j+1]+image[i][j+2]+
			image[i+1][j]+image[i+1][j+1]+image[i+1][j+2]+
				image[i+2][j]+image[i+2][j+1]+image[i+2][j+2])/9;
				v1[i][j]=blur;
		}
	    }
	}
return v1;
}
