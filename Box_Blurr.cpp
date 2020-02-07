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
