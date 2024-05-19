package com.example.Alert.Guard.dto;
import com.example.Alert.Guard.entity.UserRole;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
@Data
@AllArgsConstructor
@NoArgsConstructor
public class CrisesFighterDTO {
    private Long userId;
    private CategoryDTO category;
    private UserDTO user;
}